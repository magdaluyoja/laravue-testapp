<template>
  <div class="container">
    <div :class="activeTheme + ' col'">
      <h1>{{remarks}}</h1>
      <img :src="img" v-if="legalAge">
      <img :src="img2" v-else>
      <p>Name : {{ fullName }}</p>

      <hobby :hobbies="hobbies"></hobby>
      <div>
        <button type="button" @click="greet">Greetings</button>
        <h3>Theme</h3>
        <button
          type="button"
          v-for="(theme,index) in themes"
          :key="index"
          @click="updateTheme(index)"
        >{{theme}}</button>

        <h3>Comments</h3>
        <ul>
          <li v-for="(comment,index) in commentBody" :key="'comment'+index">
            Name : {{comment.cName}} <br>
            Comment : {{comment.comment}}<br>
            Rating : {{comment.rating}}
          </li>
        </ul>
      </div>
    </div>
    <comments-area @comment-submitted="addComment"></comments-area>
  </div>
</template>
<script>
export default {
  props:{
    remarks:{
      type:String,
      required:true
    }
  },
  data() {
    return{
      myFirstName: "Jay-R",
      myLasttName: "Magdaluyo",
      img: "/images/penguin.jpg",
      img2: "/images/penguin2.jpg",
      legalAge: false,
      hobbies: ["Anime", "Badminton", "Sleeping"],
      themes: ["classic", "colored"],
      activeTheme: "classic",
      commentBody:[]
    }
  },
  methods: {
    greet() {
      alert("Hello there! Have a good day!");
    },
    updateTheme(i) {
      this.activeTheme = this.themes[i];
    },
    addComment(commentBody){
      console.log(commentBody);
      this.commentBody.push(commentBody);
    }
  },
  computed: {
    fullName: function() {
      return this.myFirstName + " " + this.myLasttName;
    }
  }
};
</script>
