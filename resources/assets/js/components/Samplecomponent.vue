<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-danger">
                    <div class="panel-heading"><h2>sample component heading</h2></div>

                    <div class="panel-body">
                        hello,{{ name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default 
    {  created(){  },
        mounted() {
            console.log(' sample Component mounted. name=',this.name)
        },
        data(){
            return{
                name:"tejal mishra"
            }
        }
    }
</script>



<style type="text/css" scoped>
h2{
    color:green;
}
</style>
