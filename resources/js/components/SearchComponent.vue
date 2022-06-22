<template>
    <div >
        <input type="text" class="form-control"
        placeholder="What Are You Searching For?" v-on:keyup="searchJob"
        v-model="keyword">
        <div class="card-footer" v-if="keyword.length">
        <ul class="list-group">
            <li class="list-group-item" v-for="result in results">
                <a href="'jobs'+ result.id+'/'+results.slug+'/'">
                    {{result.jobName}}
                </a>
            </li>
        </ul>

        </div> 
    </div>
</template>

<script>
import Axios from 'axios';

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{
                keyword:'',
                results:[]
            }
        },
        methods:{
            searchJob(){
                this.results=[];
                if(this.keyword> 1){
                    axios.get('/jobs/search',{params:{keyword:this.keyword}})
                    .then(response=>{
                        this.results=response.data
                    });
                }
            }
        }
    }
</script>
