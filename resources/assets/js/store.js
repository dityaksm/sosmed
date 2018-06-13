import Vue from 'vue';
import Vuex from 'vuex';
import status from './store/modules/status';
import comment from './store/modules/comment';

import * as actions from './store/modules/actions';

Vue.use(Vuex);



export default new Vuex.Store({
    actions,
    modules: {
        status,
        comment
    }
});

