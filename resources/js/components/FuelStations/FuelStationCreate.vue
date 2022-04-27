<template>
    <div v-if="errors">
        <div
            v-for="(v, k) in errors"
            :key="k"
            class="bg-red-500 text-dark rounded font-bold mb-4 shadow-md py-2 px-4 pr-0"
        >
            <p
                v-for="error in v"
                :key="error"
                class="text-sm text-red-600"
            >
                {{ error }}
            </p>
        </div>
    </div>
    <form class="space-y-6" @submit.prevent="saveFuelStation">
        <div class="space-y-4 rounded-md shadow-sm">
            <div>
                <label for="rfc" class="block text-sm font-medium text-gray-700"
                    >RFC</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="rfc"
                        id="rfc"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.rfc"
                    />
                </div>
            </div>

            <div>
                <label
                    for="razonsocial"
                    class="block text-sm font-medium text-gray-700"
                    >Razón Social</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="razonsocial"
                        id="razonsocial"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.razonsocial"
                    />
                </div>
            </div>

            <div>
                <label
                    for="date_insert"
                    class="block text-sm font-medium text-gray-700"
                    >Fecha de inserción</label
                >
                <div class="mt-1">
                    <input
                        type="date"
                        name="date_insert"
                        id="date_insert"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.date_insert"
                    />
                </div>
            </div>

            <div>
                <label
                    for="numeropermiso"
                    class="block text-sm font-medium text-gray-700"
                    >Número de Permiso</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="numeropermiso"
                        id="numeropermiso"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.numeropermiso"
                    />
                </div>
            </div>

            <div>
                <label
                    for="fechaaplicacion"
                    class="block text-sm font-medium text-gray-700"
                    >Fecha de Aplicación</label
                >
                <div class="mt-1">
                    <input
                        type="date"
                        name="fechaaplicacion"
                        id="fechaaplicacion"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.fechaaplicacion"
                    />
                </div>
            </div>

            <div>
                <label
                    for="permisoid"
                    class="block text-sm font-medium text-gray-700"
                    >Permiso ID</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="permisoid"
                        id="permisoid"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.permisoid"
                    />
                </div>
            </div>

            <div>
                <label
                    for="longitude"
                    class="block text-sm font-medium text-gray-700"
                    >Longitud</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="longitude"
                        id="longitude"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.longitude"
                    />
                </div>
            </div>

            <div>
                <label
                    for="latitude"
                    class="block text-sm font-medium text-gray-700"
                    >Latitud</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="latitude"
                        id="latitude"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.latitude"
                    />
                </div>
            </div>

            <div>
                <label
                    for="codigopostal"
                    class="block text-sm font-medium text-gray-700"
                    >Código Postal</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="codigopostal"
                        id="codigopostal"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.codigopostal"
                    />
                </div>
            </div>

            <div>
                <label
                    for="calle"
                    class="block text-sm font-medium text-gray-700"
                    >Calle</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="calle"
                        id="calle"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.calle"
                    />
                </div>
            </div>

            <div>
                <label
                    for="colonia"
                    class="block text-sm font-medium text-gray-700"
                    >Colonia</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="colonia"
                        id="colonia"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.colonia"
                    />
                </div>
            </div>

            <div>
                <label
                    for="estado"
                    class="block text-sm font-medium text-gray-700"
                    >Estado</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="estado"
                        id="estado"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.estado"
                        placeholder="Del 1 al 32"
                    />
                </div>
            </div>

            <div>
                <label
                    for="municipio"
                    class="block text-sm font-medium text-gray-700"
                    >Municipio</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="municipio"
                        id="municipio"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.municipio"
                        placeholder="Del 1001 al 32058"
                    />
                </div>
            </div>

            <div>
                <label
                    for="regular"
                    class="block text-sm font-medium text-gray-700"
                    >Precio Regular</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="regular"
                        id="regular"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.regular"
                    />
                </div>
            </div>

            <div>
                <label
                    for="premium"
                    class="block text-sm font-medium text-gray-700"
                    >Precio Premium</label
                >
                <div class="mt-1">
                    <input
                        type="text"
                        name="premium"
                        id="premium"
                        class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.premium"
                    />
                </div>
            </div>
        </div>

        <button
            type="submit"
            class="inline-flex items-center px-4 py-2 mt-2 text-xs font-semibold tracking-widest text-white uppercase bg-gray-800 rounded-md border border-transparent ring-gray-300 transition duration-150 ease-in-out hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring disabled:opacity-25"
        >
            Guardar
        </button>
    </form>
</template>

<script>
import { reactive } from "vue";
import useFuelStations from "../../composables/stations";

export default {
    setup() {
        const form = reactive({
            rfc: "",
            razonsocial: "",
            date_insert: "",
            numeropermiso: "",
            fechaaplicacion: "",
            permisoid: "",
            longitude: "",
            latitude: "",
            codigopostal: "",
            calle: "",
            colonia: "",
            municipio: "",
            estado: "",
            regular: "",
            premium: "",
        });

        const { errors, storeFuelStation } = useFuelStations();

        const saveFuelStation = async () => {
            await storeFuelStation({ ...form });
        };

        return {
            form,
            errors,
            saveFuelStation,
        };
    },
};
</script>
