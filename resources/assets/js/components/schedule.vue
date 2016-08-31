<style>
	.actionCall .program-header{
		text-align: center;
	}
</style>

<template>
	<div class="schedule">
		<div class="row">
			<div class="col-md-4">
				<h3 class="schedule-title">Hours</h3>
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6">
						<div class="btn-group schedule-btn-group-xs" data-toggle="buttons" v-radio="city" v-on:click="changeSchedule">
							<label class="btn btn-default btn-xs"> <input type="radio" autocomplete="off" value="cambridge"/>Cambridge</label>
							<label class="btn btn-default btn-xs"> <input type="radio" autocomplete="off" value="stratford"/>Stratford</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="btn-group schedule-btn-group-xs" data-toggle="buttons" v-radio="program" v-on:click="changeSchedule">
							<label class="btn btn-default btn-xs"> <input type="radio" autocomplete="off" value="athlete"/>Athlete</label>
							<label class="btn btn-default btn-xs"> <input type="radio" autocomplete="off" value="Fit"/>Fit</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class= "table">
					<th>
						<table class= "table table-condensed">
							<thead>
								<tr>
									<th class="day-header">Mon</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>{{Shown.Monday[0]}}</th>
								</tr>
								<tr>
									<th>{{Shown.Monday[1]}}</th>
								</tr>
								<tr>
									<th>{{Shown.Monday[2]}}</th>
								</tr>
							</tbody>
						</table>
					</th>
					<th>
						<table class= "table table-condensed">
							<thead>
								<tr>
									<th class="day-header">Tue</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>{{Shown.Tuesday[0]}}</th>
								</tr>
								<tr>
									<th>{{Shown.Tuesday[1]}}</th>
								</tr>
								<tr>
									<th>{{Shown.Tuesday[2]}}</th>
								</tr>
							</tbody>
						</table>
					</th>
					<th>
						<table class= "table table-condensed">
							<thead>
								<tr>
									<th class="day-header">Wed</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>{{Shown.Wednesday[0]}}</th>
								</tr>
								<tr>
									<th>{{Shown.Wednesday[1]}}</th>
								</tr>
								<tr>
									<th>{{Shown.Wednesday[2]}}</th>
								</tr>
							</tbody>
						</table>
					</th>
					<th>
						<table class= "table table-condensed">
							<thead>
								<tr>
									<th class="day-header">Thur</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>{{Shown.Thursday[0]}}</th>
								</tr>
								<tr>
									<th>{{Shown.Thursday[1]}}</th>
								</tr>
								<tr>
									<th>{{Shown.Thursday[2]}}</th>
								</tr>
							</tbody>
						</table>
					</th>
					<th>
						<table class= "table table-condensed">
							<thead>
								<tr>
									<th class="day-header">Fri</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>{{Shown.Friday[0]}}</th>
								</tr>
								<tr>
									<th>{{Shown.Friday[1]}}</th>
								</tr>
								<tr>
									<th>{{Shown.Friday[2]}}</th>
								</tr>
							</tbody>
						</table>
					</th>
					<th>
						<table class= "table table-condensed">
							<thead>
								<tr>
									<th class="day-header">Sat</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>{{Shown.Saturday[0]}}</th>
								</tr>
								<tr>
									<th>{{Shown.Saturday[1]}}</th>
								</tr>
								<tr>
									<th>{{Shown.Saturday[2]}}</th>
								</tr>
							</tbody>
						</table>
					</th>
				</table>
			</div>
			
		</div>
	</div>
</template>

<script>

	var Vue = require('vue');
	Vue.use(require('vue-resource'));

	Vue.directive('radio', {
	  twoWay: true,
	  bind: function() {
	      var self = this;
	      var btns = $(self.el).find('.btn');
	      btns.each(function() {
	          $(this).on('click', function() {
	              var v = $(this).find('input').get(0).value
	              self.set(v);
	          })
	      });
	  },
	  update: function() {
	      var value = this._watcher.value;
	      if (value) {
	          this.set(value);
	          var btns = $(this.el).find('.btn')
	          btns.each(function() {
	              $(this).removeClass('active');
	              var v = $(this).find('input').get(0).value;

	              if (v === value) {
	                  $(this).addClass('active');
	              }
	          });
	      } else {
	          var input = $(this.el).find('.active input').get(0);
	          if (input) {
	              this.set(input.value);
	          }
	      }
	  }
	})
	module.exports = {
		data: function () {
			return {
				city: 'cambridge',
				program: 'athlete',
				Shown: {
					Monday: [],
					Tuesday: [],
					Wednesday: [],
					Thursday: [],
					Friday: [],
					Saturday: [],
				},

				Cambridge: {
					Fit: {
						Monday: ['6-9 am','12-1 pm','5-6 pm'],
						Tuesday: ['6-9 am','2-3 pm','5-6 pm'],
						Wednesday: ['6-9 am','12-1 pm','5-6 pm'],
						Thursday: ['6-9 am','2-3 pm','5-6 pm'],
						Friday: ['6-9 am','12-1 pm','5-6 pm'],
						Saturday: ['8-10 am','--','--'],
					},
					Athlete: {
						Monday: ['4-7 pm','--','--'],
						Tuesday: ['4-7 pm','--','--'],
						Wednesday: ['4-7 pm','--','--'],
						Thursday: ['4-7 pm','--','--'],
						Friday: ['4-6 pm','--','--'],
						Saturday: ['10-12 pm','--','--'],
					}
				},

				Stratford: {
					Fit: {
						Monday: ['12-1 pm', '5-6:30 pm', '--'],
						Tuesday: ['12-1 pm', '5-6:30 pm', '--'],
						Wednesday: ['12-1 pm', '5-6:30 pm', '--'],
						Thursday: ['12-1 pm', '5-6:30 pm', '--'],
						Friday: ['12-1 pm', '5-6:30 pm', '--'],
						Saturday: ['8:30-9:30 am', '--', '--']
					},
					Athlete: {
						Monday: ['3-5 pm', '--', '--'],
						Tuesday: ['3-5 pm', '--', '--'],
						Wednesday: ['3-5 pm', '--', '--'],
						Thursday: ['3-5 pm', '--', '--'],
						Friday: ['3-5 pm', '--', '--'],
						Saturday: ['9:30-10:30 am', '--', '--']
					}
				}
			}
		},

		ready: function() {
			this.changeSchedule();
		},
		methods:{
			changeSchedule: function () {
				if(this.city == "cambridge"){
					if(this.program == "athlete")
					{	
						this.Shown = this.Cambridge.Athlete;
					}
					else{
						this.Shown = this.Cambridge.Fit;
					}
				}
				else
				{
					if(this.program == "athlete")
					{	
						this.Shown = this.Stratford.Athlete;
					}
					else{
						this.Shown = this.Stratford.Fit;
					}
				}
			},
		},
	}
</script>