var app = new Vue({
    el:'#root',
    data:{
        studentsArray:[],
    },
    methods:{
        getApi(){
            axios.get('http://localhost:8888/git-branch-merge/api.php')
            .then((response)=>{
            this.studentsArray = response.data;
            });
        }
    },
    mounted(){
        this.getApi();
    }
})