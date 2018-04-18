<template>
  <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h4>all todo tasks <span class="pull-right">
                        <a class="btn btn-success btn-xs" data-toggle="modal" href="#addmodal">+</a></span></h4></div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item"  v-for= "t in tasks.data">{{ t.id }} - {{ t.name }} <span
                             class="pull-right"><a class="btn btn-primary btn-xs">Add</a> |
                              <a class="btn btn-danger btn-xs">Delete</a> | 
                              <a class="btn btn-info btn-xs">preview</a></span></li>
                        </ul>
                        <pagination :data="tasks" v-on:pagination-change-page="getResults"></pagination>
                    </div>
                    <div class="panel-footer text-right"><small>copyrights 2018
                        </small>
                        </div>
                </div>
            </div>
            </div>
            <div id ="modal">
                <addtask @recordadded="refreshRecord"></addtask>
        </div>
    </div>
</template>
<script type="text/javascript">
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('addtask', require('./addmodalcomponent.vue'));
export default{
    data(){
        return{
                tasks:{},
        }
    },
    methods:{
                    getResults(page) 
                    {
                        if (typeof page === 'undefined') {  page = 1;   }

                        // Using vue-resource as an example
                        axios.get('http://127.0.0.1:8000/tasks?page=' + page)
                            .then(response => {  console.log('response-getResults',response);
                                                   this.tasks=response.data;
                               }
                            )
                            .catch(error => console.log(error));
                            
                    },
                    refreshRecord(record){
                        this.tasks= record.data
                    }
	    },
    
    created(){
        axios.get('http://127.0.0.1:8000/tasks')
        .then((response) => {this.tasks = response.data;
        console.log('response-created', response);
        }
        )
        .catch((error) => console.log(error));
        console.log("tasks component loaded...");
    }
}
</script>
<style type="text/css" scoped></style>
