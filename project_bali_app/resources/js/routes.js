import Home from "./components/Home";
import NotFound from './components/NotFound';
import Lodges from "./components/Lodges";
import Booking from "./components/Booking"

export default{
    mode: 'history',
    linkActiveClass: 'font-weight-bold',
    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            component: Home,
        },
        {
            path: '/lodges',
            props: true,
            component: Lodges,
            name: Lodges
        },
        {
            path: '/lodge/book',
            props: true,
            component: Booking,
            name: 'Booking'
        }
    ]
}


