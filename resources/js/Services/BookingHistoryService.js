import axios from 'axios';

export default class BookingHistoryService {

    getBookingHistory() {
        return axios.get('/storage/data/booking_history.json')
            .then(res => res.data.data);
    }
}