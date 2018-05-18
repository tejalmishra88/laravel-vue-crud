<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h2>all name list <span class= "pull-right">
                        <a class="btn btn-success btn-xs" data-toggle="modal" href="#addmodal1">+</a></span></h2></div>

                    <div class="panel-body">
                       <ul class="list-group">
                           <li class="list-group-item"  v-for="a in aditi">{{a.id}} - {{a.name}}> <span class=
                               "pull-right"><a data-toggle="modal" href="#editmodal1" class="btn btn-primary btn-xs">edit</a> | 
                           <button @click="delRecord(t.id)" class="btn btn-danger btn-xs">Delete</button> | <a data-toggle="modal" href="#viewmodal1" class="btn btn-info btn-xs">Preview</a></span></li>
                       </ul>
                    </div>
                     <div class="panel-footer text-right"><small>by company xyz</small></div>
                </div>
            </div>
        </div>
        <div id="modal">
            <addtask1></addtask1>
        </div>
    </div>
</template>

<script type="text/javascript">
//Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('addtask1', require('./addmodal1component.vue'));
Vue.component('edittask', require('./editmodal1component.vue'));
Vue.component('viewtask', require('./viewmodal1component.vue'));
    export default {
        data(){
            return{
                aditi:{},
                records:{},
                editRec:{},
                errors:[],
                search:'',
            }
        },
        methods:{
            
        },
        created() {
            axios.get('http://127.0.0.1:8000/aditinames/getnames')
            .then((response) => this.aditi = response.data)
            .catch((error) =>console.log(error))
            console.log(' example Component loaded....')
        },
    }
</script>
<style type="text/css" scoped>
h2{
    color:blue;
}
</style>