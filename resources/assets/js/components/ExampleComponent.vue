<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h2>all name list <span class= "pull-right"><button class="btn btn-success btn-xs">+</button></span></h2></div>

                    <div class="panel-body">
                       <ul class="list-group">
                           <li class="list-group-item"  v-for="a in aditi">{{a.id}} - {{a.name}}> <span class=
                               "pull-right"><button class="btn btn-primary btn-xs">Add</button> | 
                           <button class="btn btn-danger btn-xs">Delete</button> | <button class="btn btn-info btn-xs">Preview</button></span></li>
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
                aditi:{}
            }
        },
        methods:{

        },
        created() {
            axios.get('http://127.0.0.1:8000/aditinames/getnames')
            .then((response) =>{ console.log('response===',response)
                this.aditi = response.data})
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