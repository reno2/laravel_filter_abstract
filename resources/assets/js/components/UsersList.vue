<template>
	<div>



				<div class="container">
				<form action="/users" class="form-inline" style="width: 100%;">
					<div style="width: 100%;" class="d-flex justify-content-between">
					<div class="form-group">

						<input type="text" v-model="name" class="form-control" placeholder="name">
					</div>

					<div class="form-group">

						<input type="text" v-model="birthday" class="form-control" placeholder="birthday">
					</div>


					<div class="form-group ">

						<select v-model="gender" id="gender"  class="form-control">
							<option disabled value="">Выбрать ...</option>
							<option value="1">Male</option>
							<option value="2">Female</option>
						</select>

					</div>


					<div class="form-group">
						<div class="form-group mx-2">
						<input type="radio" v-model="is_active" class="form-control" id="is-active" value="true">
						<label for="is-active" class="">Активные</label>
						</div>
							<div class="form-group mx-2">
						<input type="radio" v-model="is_active" class="form-control" id="is-not-active" value="false">
						<label for="is-not-active" class="">Не активные</label>
							</div>
								<div class="form-group mx-2">
						<input type="radio" v-model="is_active" class="form-control" id="all" value="">
						<label for="all" class="">Все</label>
								</div>
					</div>


					<div class="btn-group" role="group">
						<button :disabled="buzy" @click.prevent="fetch" type="submite" class="btn btn-primary"><i v-if="buzy" class="fas fa-spinner"></i> Filter posts</button>
						<button class="btn btn-warning" @click.prevent="reset">Reset </button>
					</div>
					</div>
				</form>
				</div>
				<br>


		<div class="col-md">

		<table class="table table-striped">
			<thead>
			<tr>
				<th scope="col">Name</th>
				<th scope="col">Birthday</th>
				<th scope="col">Gender</th>
				<th scope="col">Is active</th>
			</tr>
			</thead>
			<tbody>

			<tr v-for="user in users">
				<td>{{user.name}}</td>
				<td> {{user.info.birthday}}</td>
				<td> {{user.gender == '1' ? 'male' : 'female'}}</td>
				<td class="card-text">{{user.is_active ? 'Yes' : 'No'}}</td>

			</tr>

			</tbody>
		</table>
		</div>
	</div>
</template>
<script>
export default{
    data(){
        return {
            buzy: false,
						users: null,
		        name: null,
		        gender: null,
		        birthday: null,
		        is_active: null

        }
    },
		methods: {
			reset(){
        this.name = null;
        this.gender = null;
        this.birthday = null;
        this.is_active = null;
        this.fetch()
			},

			fetch(){
			    this.buzy = true
			    axios.get('/users', {
			        params: {
			            name: this.name,
                  gender: this.gender,
                  birthday: this.birthday,
                  is_active: this.is_active
			        }
			    }).then(res => {
			        if(res.data)
			          this.users = res.data
                this.buzy = false
          })
			}
		},
		mounted() {
        this.fetch();
        console.log('fdsafdaf');
    }

}
</script>