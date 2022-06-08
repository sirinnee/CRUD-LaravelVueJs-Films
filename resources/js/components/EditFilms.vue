<template>
<div class="row justify-content-center">
<div class="col-md-6">
<h3 class="text-center">Modification</h3>
<form @submit.prevent="handleSubmitForm">
<div class="form-group">
<label>Titre</label>
<input type="text" class="form-control"  v-model="films.titre" required>
</div>
<div class="form-group">
<label>Realisateur</label>
<input type="text" class="form-control"  v-model="films.realisateur" required>
</div>
<div class="form-group">
<label>Pays</label>
<input type="text" class="form-control" v-model="films.pays" required>
</div>
<div class="form-group">
<label>Date De Sortie</label>
<input type="date" class="form-control" v-model="films.date_sortie" >
</div>
<div class="form-group">
<label>Description</label>
<input type="text" class="form-control" v-model="films.description" >
</div>
<div class="form-group">
<label>Poster</label>
<input type="text" class="form-control" v-model="films.poster" >
</div>
<div class="form-group">
<label>Durée</label>
<input type="text" class="form-control" v-model="films.duree" >
</div>
<div class="form-group">
<label>Langue</label>
<input type="text" class="form-control" v-model="films.langue" >
</div>
<div class="form-group">
<button class="btn btn-danger btn-block">Modifier</button>
</div>
</form>
</div>
</div>
</template>
<script>
import Service from "../services/Service";
export default {
data() {
return {
films: {}
}
},
created() {
Service.getOne(this.$route.params.id).then((res) => {
this.films = res.data;
})
},
methods:{
handleSubmitForm() {
Service.edit(this.$route.params.id, this.films).then(()=>
{
this.$router.push('/')
this.films = {
titre: "",
realisateur: "",
pays: "",
date_sortie: "",
description: "",
poster: "",
duree: "",
langue: ""
}
}).catch(error => {
console.log(error)
});
}
}
}
</script>
<style scoped>
img {
width: 30%;
margin: auto;
display: block;
margin-bottom: 10px;
}
</style>
