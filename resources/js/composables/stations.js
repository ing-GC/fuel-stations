import { ref } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';

export default function useFuelStations() {
    const fuelStations = ref([]);
    const router = useRouter();

    const errors = ref('');

    const getFuelStations = async () => {
        let response = await axios.get('api/v1/fuel-stations')
        fuelStations.value = response.data.results
    }

    const storeFuelStation = async (data) => {
        errors.value = ''
        try {
            await axios.post('/api/v1/fuel-stations', data)
            await router.push({ name: 'fuel-stations.index' })
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }
    }

    const destroyFuelStation = async (id) => {
        let response = await axios.delete('api/v1/fuel-stations/' + id)
        fuelStations.value = response.data.results
    }

    return {
        fuelStations,
        errors,
        getFuelStations,
        storeFuelStation,
        destroyFuelStation
    }
}