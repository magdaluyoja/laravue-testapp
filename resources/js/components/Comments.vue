<template>
    <div class="col">
        <ul>
            <li v-for="(error,index) in errors" :key="'err'+index">{{error}}</li>
        </ul>
        <form>
            <label>
                Name : 
                <input type="text" id="cName" v-model="cName">
            </label>
            <br>
            <label>
                Comment : 
                <textarea id="commentText" v-model="comment"></textarea>
            </label>
            <br>
            <label>
                Rating : 
                <select id="rating" v-model.number="rating">
                    <option>5</option>
                    <option>4</option>
                    <option>3</option>
                    <option>2</option>
                    <option>1</option>
                </select>
            </label>
            <br>
            <button type="button" @click="submitComment">Submit</button>
        </form>
    </div>
</template>
<script>
export default {
    data(){
        return{
            cName:null,
            comment:null,
            rating:null,
            errors:null
        }
    },
    methods:{
        submitComment:function(){
            let commentBody = {
                cName:this.cName,
                comment:this.comment,
                rating:this.rating
            }

            this.$emit('comment-submitted', commentBody);
            this.clearFields();
        },
        clearFields:function(){
            this.cName=null;
            this.comment=null;
            this.rating=null;
        }
    }
}
</script>