import axios from 'axios';

export default class ObjectiveService {

    getAllObj() {
        return axios.get('/storage/data/objective.json')
            .then(res => res.data.data);
    }
}