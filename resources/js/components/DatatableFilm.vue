<template>
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
  <div>
      <table class="table" id="datatable">
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
import 'jquery/dist/jquery.min.js';
import 'bootstrap/dist/css/bootstrap.min.css';
import "datatables.net-dt/js/dataTables.dataTables"
import "datatables.net-dt/css/jquery.dataTables.min.css"
import Service from "../services/Service.js";
import $ from 'jquery';
export default {
data() {
return {
films: []
}
},
mounted(){
    Service.getAll().then((response)=>
    {
      this.films = response.data;
      $(function() {$('#datatable').DataTable();});
    })
  },methods: {
deletefilms(id){
let indexOfArrayItem = this.films.findIndex(F => F.id === id);
if (window.confirm("Etes-vous sûr de vouloir supprimer ?")) {
Service.del(id).then(() => {
this.films.splice(indexOfArrayItem, 1);
}).catch(error => {
console.log(error)
});
}
}}}</script>
<style>
.btn-success {
margin-right: 10px;
}
</style>
