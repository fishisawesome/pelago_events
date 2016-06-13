Vue.component('users', {
	template: "#users-template",

	data: function(){
		return {
			list: [],
			nation_id: '',
			name: '',
			telephone: '',
		};
	},

	created: function () {
		this.fetchList();
	},

	methods: {
		fetchList: function(){
			this.$http.get('users/json-list', function(data){
				this.list = data;
			}.bind(this));
		},
		deleteUser: function(user) {
			Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
			this.$http.delete('users/'+user.id).then(this.list.$remove(user));
		},
		submitUser: function(e){
			Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');
			this.$http.post('users', { name: this.name, telephone: this.telephone, nation_id: this.nation_id }, function(){
				this.fetchList();
			});
			$('.create-user-modal').modal('hide');
		}
	}
});

new Vue({
	el: '#app',
});