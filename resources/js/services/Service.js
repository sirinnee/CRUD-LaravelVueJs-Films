import axios from 'axios'
class Service {
getAll() {
return axios.get("http://127.0.0.1:8000/api/films/")
}
add(data) {
return axios.post("http://127.0.0.1:8000/api/films/", data);
}
getOne(id) {
return axios.get(`http://127.0.0.1:8000/api/films/${id}`)
}
edit(id,data) {
return axios.put(`http://127.0.0.1:8000/api/films/${id}`,data);
}
del(id) {
return axios.delete(`http://127.0.0.1:8000/api/films/${id}`)
}
}
export default new Service();
