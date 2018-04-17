<template>
 
  <div class="modal fade" id= "addmodal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                  </button>
                  <h4 class="modal-title">Add New Record!</h4>
                  </div>
                   <div class="modal-body">
                       <p class="alert alert-success" v-if="success.length > 0">{{ success}}</p>
                       <label for="name">add new task</label>
                       <textarea name="name" id="name" class="form-control" v-model="record"></textarea>
                   </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" @click="addRecord">Save Changes</button>
                    </div>
        </div>
      </div>
      </div>
</template>
<script type="text/javascript">
export default {
    data(){
        return{
            success:'',
            record:'',
        }
    },
    methods:{
        addRecord()
        { console.log('this.record=',this.record);
           // axios.get("http://127.0.0.1:8000/tasks/create");

            axios.post("http://127.0.0.1:8000/tasks",{ 'name':this.record,})
                .then(data =>{ this.$emit('recordadded', data);
                                 this.success = "Task Added Successfully..."; 
                            })
                .catch(error =>console.log(error))
                this.record='';
            
        }
    }
  
}
</script>
<style type="text/css"scoped>

</style>


