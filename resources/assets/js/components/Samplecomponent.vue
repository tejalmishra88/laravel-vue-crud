<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-danger">
                    <div class="panel-heading"><h2>all name list</h2></div>

                    <div class="panel-body">
                       <ul class="list-group">
                           <li class="list-group-item"  v-for="a in aditi5">{{a.id}}-{{a.name}}> 
                               <span classs="pull-right"><button>Add</button> | 
                           <button>Delete</button> | <button>Preview</button></span></li>
                       </ul>
                    </div>
                     <div class="panel-footer text-right"><small>by company xyz</small></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                aditi5:{}
            }
        },
        methods:{

        },
        created() {
            axios.get('http://127.0.0.1:8000/xyz')
            .then((response) =>{ console.log('response===',response)
                this.aditi5 = response.data})
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