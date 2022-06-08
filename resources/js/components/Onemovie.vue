<template>
<div class="row">
<div class="col-md-30">
<table class="table table-striped ">
       <tbody>
         <td>
                <tr>ID</tr>
                <tr>Titre</tr>
                <tr>Realisateur</tr>
                <tr>pays</tr>
                <tr>Date De Sortie</tr>
                <tr>Description</tr>
                <tr>Poster</tr>
                <tr>Durée</tr>
                <tr>Langue</tr>
        </td>
        <td>
                 <tr>{{F.id}}</tr>
                <tr >{{F.titre}}</tr>
                <tr >{{F.realisateur}}</tr>
                <tr >{{F.pays}}</tr>
                <tr >{{F.date_sortie}}</tr>
                <tr >{{F.description}} h</tr>
                <tr >{{F.poster}}</tr>
                <tr >{{F.duree}}</tr>
                <tr >{{F.langue}}</tr>
        </td>
        <tr> <td><router-link  class="btn btn-info btn-block" :to="{name: 'Modification', params: {id: F.id }}">Edit</router-link></td>
            </tr>
     </tbody>
     </table>
</div></div>
</template>
<script>
import Service from "../services/Service.js";
export default {
data() {
return {
F: {}
}
},
created() {
        Service.getOne(this.$route.params.id).then(res => {
this.F= res.data;
}).catch(error => {
console.log(error)
});
},
}
</script>
