<template lang="">
<nav class="navbar navbar-warning text-light bg-danger justify-content-between flexnowrap flex-row" style="">
    <div class="container">
        <router-link class="navbar-brand  btn text-light bg-danger " to="/"  style="background-color: transparent">
         Movies</router-link>
      <ul class="nav navbar-nav flex-row center-right">
        <li class="nav-item">
<router-link class="navbar-brand float-center btn text-light bg-danger " to="/DatatableFilm"> Home </router-link>
</li>
<li class="nav-item">
<router-link class="navbar-brand float-center btn text-light bg-danger " to="/Add"> ajouter </router-link>
</li>
<li class="nav-item">
<router-link class="navbar-brand float-center btn text-light bg-danger " to="/DatatableFilm"> Data Table </router-link>
</li>
</ul>
</div>
</nav>
    <div>
        <h1 >Liste des Films</h1>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                <th scope="row">ID</th>
                <th scope="row">Titre</th>
                <th scope="row">Realisateur</th>
                <th scope="row">pays</th>
                <th scope="row">Date De Sortie</th>
                <th scope="row">Description</th>
                <th scope="row">Poster</th>
                <th scope="row">Durée</th>
                <th scope="row">Langue</th>
                <th>Actions</th>

            </tr>
            </thead>
            <tbody>
            <tr v-for="F in films" :key="F">
                <td >{{F.id}}</td>
                <td >{{F.titre}}</td>
                <td >{{F.realisateur}}</td>
                <td >{{F.pays}}</td>
                <td >{{F.date_sortie}}</td>
                <td >{{F.description}} h</td>
                <td >{{F.poster}}</td>
                <td >{{F.duree}}</td>
                <td >{{F.langue}}</td>
                <td><button @click.prevent="deleteFilm(F.id)" class="btn btn-danger btn-block">Delete</button>
                 <router-link  class="btn btn-info btn-block" :to="{name: 'Modification', params: {id: F.id }}">Edit</router-link>
                <router-link class="navbar-brand float-center btn text-light bg-danger "  :to="{name: 'Onemovie', params: {id: F.id }}">Show</router-link>
</td>
            </tr>

            </tbody>

        </table>
    </div>
</template>
<script>
import Service from "../services/Service.js";
export default {
data() {
return {
films: []
}
},
created() {
Service.getAll().then(res => {
this.films = res.data;
}).catch(error => {
console.log(error)
});
},
methods: {
deleteFilm(id){
let indexOfArrayItem = this.films.findIndex(F => F.id === id);
if (window.confirm("Etes-vous sûr de vouloir supprimer ?")) {
Service.del(id).then(() => {
this.films.splice(indexOfArrayItem, 1);
}).catch(error => {
console.log(error)
});
}
},
ajouter() {
Service.add(this.films).then(() => {
this.$router.push('/')
this.films = {
id: "",
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
<style>
.btn-success {
margin-right: 10px;
}
</style>
