import { createRouter, createWebHistory } from "vue-router";
import FuelStationIndex from '../components/FuelStations/FuelStationIndex';
import FuelStationCreate from '../components/FuelStations/FuelStationCreate';

const routes = [
    {
        path: '/dashboard',
        name: 'fuel-stations.index',
        component: FuelStationIndex
    },
    {
        path: '/fuel-stations/create',
        name: 'fuel-stations.create',
        component: FuelStationCreate
    }
]

export default createRouter({
    history: createWebHistory(),
    routes
})
