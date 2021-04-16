import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        furniture: [],
        accessories: [],
        appliances: [],
        organizers: {},
        tables: [],
        walls: [],
    },
    mutations:{
        ADD_FURNITURE(state,furniture){
            state.furniture = furniture;
        },
        ADD_ACCESORIES(state,accessories){
            state.accessories = accessories;
        },
        ADD_APPLIANCES(state,appliances){
            state.appliances = appliances;
        },
        ADD_ORGANIZERS(state,organizers){
            state.organizers = organizers;
        },
        ADD_TABLES(state,tables){
            state.tables = tables;
        },
        ADD_WALLS(state,walls){
            state.walls = walls;
        },
    }

});
