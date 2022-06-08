import { createRouter,createWebHashHistory } from 'vue-router'
import menu from "./menu";
import home from "./home";
import Liste_des_films  from "./components/Liste_des_films";
import EditFilms from "./components/EditFilms";
import  AddFilms from "./components/AddFilm";
import DatatableFilm from "./components/DatatableFilm";
import Onemovie from "./components/Onemovie";
const routes = [
{
path: '/',
name: 'menu',
component: menu
},
{
    path: '/home',
    name: 'home',
    component: home
    },
    ,
{
    path: '/Films/liste',
    name: 'Liste_des_films',
    component: Liste_des_films
    },
    {
    path: '/edit/:id',
    name: 'Modification',
    component: EditFilms
    },
    {
    path: '/Add',
    name: 'Add',
    component: AddFilms
    },
    {
    path: '/DatatableFilm',
    name: 'DatatableFilm',
    component: DatatableFilm
    },
    {
    path: '/Onemovie/:id',
    name: 'Onemovie',
    component: Onemovie
    }
];
const router = createRouter({
history: createWebHashHistory(),
routes
})
export default router
