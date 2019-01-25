<template>
    <div>
        <h3>Hobbies</h3>
        <ul>
            <li v-for="(hobby,index) in hobbies" :key="index">{{hobby}}</li>
        </ul>
    </div>
</template>
<script>
export default {
    props:{
        hobbies:{
            type:Array,
            required:true
        }
    }
}
</script>
