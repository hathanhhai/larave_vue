import axios from 'axios'
const options = {
    method: 'POST',
    headers: { 'content-type': 'application/x-www-form-urlencoded','Content-type': 'application/json' },

};
axios(options);
export default () => {
    return axios.create({
        baseURL: '/',
    })
}