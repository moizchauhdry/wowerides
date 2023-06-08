<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    work_orders: Object,
});
</script>

<template>
    <Head title="Work Order" />

    <AuthenticatedLayout>
        <template #header>
            <div class="pb-5">
                <h2
                    class="float-left font-semibold text-xl text-gray-800 leading-tight"
                >
                    Work Order
                </h2>

                <Link
                    class="float-right focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-2 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-1.5 mr-2 mb-2 dark:focus:ring-green-900"
                    :href="route('work-order.create')"
                    >Add Work Order</Link
                >
            </div>
        </template>

        <div class="py-6 px-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="relative overflow-x-auto">
                        <table
                            class="w-full text-sm text-left text-gray-500 light:text-gray-400"
                        >
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 light:bg-gray-700 light:text-gray-400"
                            >
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        W.O. #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        W.O Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Customer name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">Modal</th>
                                    <th scope="col" class="px-6 py-3">Total</th>
                                    <th scope="col" class="px-6 py-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="bg-white border-b light:bg-gray-800 light:border-gray-700"
                                    v-for="work_order in work_orders.data"
                                >
                                    <td class="px-6 py-4">
                                        {{ work_order.id }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ work_order.wo_date }}
                                    </td>
                                    <td scope="row" class="px-6 py-4">
                                        <b>{{ work_order.wo_customer_name }}</b>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ work_order.wo_bike_category }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ work_order.wo_bike_model }}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${{ work_order.wo_grand_total }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <Link
                                            class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-2 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-1 mr-2 mb-2 dark:focus:ring-yellow-900"
                                            :href="
                                                route(
                                                    'work-order.edit',
                                                    work_order.id
                                                )
                                            "
                                            >Edit</Link
                                        >
                                        <a
                                            :href="
                                                route(
                                                    'work-order.pdf',
                                                    work_order.id
                                                )
                                            "
                                            class="focus:outline-none text-white bg-purple-500 hover:bg-purple-600 focus:ring-2 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-1 mr-2 mb-2 dark:focus:ring-purple-900"
                                            target="_blank"
                                            >Invoice</a
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
