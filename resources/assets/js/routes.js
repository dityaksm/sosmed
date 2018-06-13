// import User from './components/user/User.vue';
// import UserStart from './components/user/UserStart.vue';
import UserDetail from './components/user/UserDetail.vue';
// import UserEdit from './components/user/UserEdit.vue';
import Home from './components/Home.vue';
import Feed from './components/Feed.vue';

export const routes = [
    {
        path: '/home',
        name: 'home',
        components: {
            default: Home
        }
    },
    {
        path: '/feed',
        name: 'feed',
        components: {
            default: Feed
        }
    },
    {
        path: '/user/:id',
        name: 'userDetail',
        components: {
            default: UserDetail
        }
    }

];