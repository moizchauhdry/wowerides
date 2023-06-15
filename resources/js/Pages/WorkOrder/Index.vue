<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import Modal from "@/Components/Modal.vue";
import { ref } from "vue";
import SuccessButton from "@/Components/SuccessButton.vue";
import DangerButton from "@/Components/DangerButton.vue";
import { useForm } from "@inertiajs/vue3";
import CustomLink from "@/Components/CustomLink.vue";

defineProps({
    work_orders: Object,
});

const confirmingCompleteOrder = ref(false);

const form = useForm({
    wo_id: "",
});

const confirmCompleteOrder = (id) => {
    confirmingCompleteOrder.value = true;
    form.wo_id = id;
};

const completeOrder = () => {
    form.post(route("work-order.complete"), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
    });
};

const closeModal = () => {
    confirmingCompleteOrder.value = false;
};
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
                                    class="border-b light:bg-gray-800 light:border-gray-700"
                                    :class="work_order.wo_completed == 1 ? 'bg-green-100' : 'bg-white '"
                                    v-for="(
                                        work_order, index
                                    ) in work_orders.data"
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
                                        <CustomLink :href="route('work-order.edit',work_order.id)" class="m-1" type="blue">Edit</CustomLink>
                                        <CustomLink :href="route('work-order.pdf',work_order.id)" target="_blank" type="gray" class="m-1">Invoice</CustomLink>
                                        <SuccessButton @click="confirmCompleteOrder(work_order.id)" class="m-1" v-if="work_order.wo_completed == 0">Complete</SuccessButton>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <Modal :show="confirmingCompleteOrder" @close="closeModal">
            <div class="p-6">
                <h2 class="text-lg font-medium text-gray-900">
                    Are you sure you want to complete the order?
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    Once the work order is marked as completed, the current date
                    will be assigned to the order, and a work order completion
                    email will be sent to the relevant user.
                </p>

                <div class="mt-6 flex justify-end">
                    <DangerButton @click="closeModal"> Cancel </DangerButton>
                    <SuccessButton
                        class="ml-3"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                        @click="completeOrder"
                    >
                        Complete
                    </SuccessButton>
                </div>
            </div>
        </Modal>
    </AuthenticatedLayout>
</template>
