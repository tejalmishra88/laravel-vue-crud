<template>
  <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h4>all todo tasks <span class="pull-right">
                        <button class="btn btn-success btn-xs">+</button></span></h4>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item"  v-for= "t in tasks">{{ t.id }} - {{ t.name }} <span
                             class="pull-right"><button class="btn btn-primary btn-xs">Add</button> |
                              <button class="btn btn-danger btn-xs">Delete</button> | 
                              <button class="btn btn-info btn-xs">preview</button></span></li>
                        </ul>
                    </div>
                    <div class="panel-footer text-right"><small>copyrights 2018
                        </small></div>
                </div>
            </div>
        </div>
    </div>
</template>
<script type="text/javascript">
export default{
    data(){
        return{
                tasks:{}
        }
    },
    methods:{

    },
    created(){
        axios.get('http://127.0.0.1:8000/tasks')
        .then((response) => this.tasks = response.data)
        .catch((error) => console.log(error));
        console.log("tasks component mounted...");
    }
}
</script>
<style type="text/css" scoped></style>
