<template lang="">
    <nav class="navbar navbar-warning text-light bg-danger justify-content-between flexnowrap flex-row" style="">
    <div class="container">
        <router-link class="navbar-brand  btn text-light bg-danger " to="/"  style="background-color: transparent">
          Movies</router-link>
      <ul class="nav navbar-nav flex-row center-right">
        <li class="nav-item">
<router-link class="navbar-brand float-center btn text-light bg-danger " to="/"> Home </router-link>
</li>
<li class="nav-item">
<router-link class="navbar-brand float-center btn text-light bg-danger " to="/Add"> Add </router-link>
</li>
<li class="nav-item">
<router-link class="navbar-brand float-center btn text-light bg-danger " to="/DatatableFilm"> Data Table </router-link>
</li>
</ul>
</div>
</nav>
<form @submit.prevent="handleSubmitForm">
    <table>
        <tr>
        <td class="form-group">
<label>Titre</label>
<input type="text" class="form-control" v-model="films.titre" required>
</td>
<td class="form-group">
<label>Realisateur</label>
<input type="text" class="form-control" v-model="films.realisateur" required>
</td>
<td class="form-group">
<label>Pays</label>
<input type="text" class="form-control" v-model="films.pays" >
</td>
</tr>
<tr>
<td class="form-group">
<label>Date De Sortie</label>
<input type="date" class="form-control" v-model="films.date_sortie" required>
</td>

<td class="form-group">
<label>Description</label>
<input type="text" class="form-control" v-model="films.description" >
</td></tr>
<tr>
<td class="form-group">
<label>Poster</label>
<input type="text" class="form-control" v-model="films.poster" >
</td>
</tr>
<tr>
<td class="form-group">
<label>Durée</label>
<input type="text" class="form-control" v-model="films.duree" >
</td>
</tr>
<td class="form-group">
<label>Langue</label>
<input type="text" class="form-control" v-model="films.langue" >
</td>
<tr>
<td class="form-group">
<button class="btn btn-info btn-block">Ajouter</button>
</td>
</tr>
</table>
</form>
</template>
<script>
import Service from "../services/Service";
export default {
data() {
return {
films: {
titre: "",
realisateur: "",
pays: "",
date_sortie: "",
description: "",
poster: "",
duree: "",
langue: ""
}
}
},
methods: {
handleSubmitForm() {
Service.add(this.films).then(() => {
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
},
}
}
</script>
<style scoped>
</style>
