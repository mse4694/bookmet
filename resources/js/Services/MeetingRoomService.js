import axios from 'axios';

export default class MeetingRoomService {

    getAllRoom() {
        return axios.get('/storage/data/rooms.json')
            .then(res => res.data.data);
    }
}