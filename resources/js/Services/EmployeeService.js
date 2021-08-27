import axios from 'axios';

export default class EmployeeService {

    getAllEmp() {
        return axios.get('https://randomuser.me/api/?results=30&nat=us,dk,fr,gb')
            .then(res => res.data.results);
    }
}