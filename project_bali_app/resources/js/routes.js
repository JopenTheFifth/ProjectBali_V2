
import ExampleComponent from './components/ExampleComponent';
import Home from "./components/Home";
import NotFound from './components/NotFound';

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
            path: '/example',
            component: ExampleComponent
        }
    ]
}


