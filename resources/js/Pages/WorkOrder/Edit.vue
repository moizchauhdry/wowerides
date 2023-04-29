<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm, usePage } from "@inertiajs/vue3";

import VueDatePicker from "@vuepic/vue-datepicker";
import "@vuepic/vue-datepicker/dist/main.css";
import Multiselect from "@vueform/multiselect";

const props = defineProps({
    edit_mode: Boolean,
    work_order: Object,
});

const work_order = usePage().props.work_order;

var wo_item_categories = [
    { value: 1, label: "Service and Labor" },
    { value: 2, label: "Parts and Materials" },
];

const form = useForm({
    wo_id: work_order?.id,
    wo_title: work_order?.wo_title,
    wo_customer_name: work_order?.wo_customer_name,
    wo_bike_brand: work_order?.wo_bike_brand,
    wo_bike_model: work_order?.wo_bike_model,
    wo_date: work_order?.wo_date,
    wo_return_date: work_order?.wo_return_date,
    wo_completed_date: work_order?.wo_completed_date,

    wo_addr_customer_name: work_order?.billing_address?.wo_addr_customer_name,
    wo_addr_str_address: work_order?.billing_address?.wo_addr_str_address,
    wo_addr_city: work_order?.billing_address?.wo_addr_city,
    wo_addr_state: work_order?.billing_address?.wo_addr_state,
    wo_addr_zipcode: work_order?.billing_address?.wo_addr_zipcode,
    wo_addr_phone: work_order?.billing_address?.wo_addr_phone,
    wo_addr_email: work_order?.billing_address?.wo_addr_email,

    wo_item_category_id: work_order?.items?.wo_item_category_id,
    wo_item_name: work_order?.items?.wo_item_name,
    wo_item_hours: work_order?.items?.wo_item_hours,
    wo_item_rate: work_order?.items?.wo_item_rate,
});

console.log(work_order);

const submit = () => {
    form.post(route("work-order.update"));
};
</script>

<style src="@vueform/multiselect/themes/default.css"></style>

<template>
    <Head :title="edit_mode ? 'Edit work_order' : 'Create work_order'" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ edit_mode ? "Edit" : "Create" }} Work Order
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form @submit.prevent="submit()" class="mt-6 space-y-6">
                            <h4 class="text-2xl font-bold text-center">
                                Work Order - Basic Information
                            </h4>
                            <hr
                                class="w-48 h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700"
                            />

                            <div
                                class="grid gap-4 lg:grid-cols-3 md:grid-cols-2 grid-rows-1"
                            >
                                <div>
                                    <InputLabel
                                        for="wo_date"
                                        value="W.O. Date"
                                        class="mb-1"
                                    />

                                    <VueDatePicker
                                        v-model="form.wo_date"
                                        :teleport="true"
                                    ></VueDatePicker>

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.wo_date"
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="wo_return_date"
                                        value="Return Date"
                                        class="mb-1"
                                    />

                                    <VueDatePicker
                                        v-model="form.wo_return_date"
                                        :teleport="true"
                                    ></VueDatePicker>

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.wo_return_date"
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="wo_completed_date"
                                        value="Completed Date"
                                        class="mb-1"
                                    />

                                    <VueDatePicker
                                        v-model="form.wo_completed_date"
                                        :teleport="true"
                                    ></VueDatePicker>

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.wo_completed_date"
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="wo_customer_name"
                                        value="Customer Name"
                                    />

                                    <TextInput
                                        id="wo_customer_name"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.wo_customer_name"
                                        autofocus
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.wo_customer_name"
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="wo_bike_brand"
                                        value="Bike Brand"
                                    />

                                    <TextInput
                                        id="wo_bike_brand"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.wo_bike_brand"
                                        autofocus
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.wo_bike_brand"
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="wo_bike_model"
                                        value="Bike Model"
                                    />

                                    <TextInput
                                        id="wo_bike_model"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.wo_bike_model"
                                        autofocus
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.wo_bike_model"
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="wo_title"
                                        value="Job Title"
                                    />

                                    <TextInput
                                        id="wo_title"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.wo_title"
                                        autofocus
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.wo_title"
                                    />
                                </div>
                            </div>

                            <h3 class="text-2xl font-bold text-center">
                                Work Order - Billing Address
                            </h3>
                            <hr
                                class="w-48 h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700"
                            />

                            <div
                                class="grid gap-4 lg:grid-cols-4 md:grid-cols-2 grid-rows-1"
                            >
                                <div>
                                    <InputLabel
                                        for="wo_addr_customer_name"
                                        value="Customer Name"
                                    />

                                    <TextInput
                                        id="wo_addr_customer_name"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.wo_addr_customer_name"
                                        autofocus
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="
                                            form.errors.wo_addr_customer_name
                                        "
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="wo_addr_str_address"
                                        value="Street Address"
                                    />

                                    <TextInput
                                        id="wo_addr_str_address"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.wo_addr_str_address"
                                        autofocus
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="
                                            form.errors.wo_addr_str_address
                                        "
                                    />
                                </div>

                                <div>
                                    <InputLabel for="city" value="City" />

                                    <TextInput
                                        id="wo_addr_city"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.wo_addr_city"
                                        autofocus
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.wo_addr_city"
                                    />
                                </div>

                                <div>
                                    <InputLabel for="state" value="State" />

                                    <TextInput
                                        id="wo_addr_state"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.wo_addr_state"
                                        autofocus
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.wo_addr_state"
                                    />
                                </div>

                                <div>
                                    <InputLabel for="zipcode" value="Zipcode" />

                                    <TextInput
                                        id="wo_addr_zipcode"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.wo_addr_zipcode"
                                        autofocus
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.wo_addr_zipcode"
                                    />
                                </div>

                                <div>
                                    <InputLabel for="phone" value="Phone" />

                                    <TextInput
                                        id="phone"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.wo_addr_phone"
                                        autofocus
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.wo_addr_phone"
                                    />
                                </div>

                                <div>
                                    <InputLabel for="email" value="Email" />

                                    <TextInput
                                        id="email"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.wo_addr_email"
                                        autofocus
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.wo_addr_email"
                                    />
                                </div>
                            </div>

                            <h4 class="text-2xl font-bold text-center">
                                Work Order - Items
                            </h4>
                            <hr
                                class="w-48 h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700"
                            />

                            <div
                                class="grid gap-4 lg:grid-cols-4 md:grid-cols-2 grid-rows-1"
                            >
                                <div>
                                    <InputLabel
                                        for="wo_item_category_id"
                                        value="Item Category"
                                        class="mb-1"
                                    />

                                    <Multiselect
                                        v-model="form.wo_item_category_id"
                                        :options="wo_item_categories"
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="
                                            form.errors.wo_item_category_id
                                        "
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="item_name"
                                        value="Item Name"
                                    />

                                    <TextInput
                                        id="wo_item_name"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.wo_item_name"
                                        autofocus
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.wo_item_name"
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="wo_item_hours"
                                        value="Hours"
                                    />

                                    <TextInput
                                        id="wo_item_hours"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.wo_item_hours"
                                        autofocus
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.wo_item_hours"
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="wo_item_rate"
                                        value="Rate"
                                    />

                                    <TextInput
                                        id="wo_item_rate"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.wo_item_rate"
                                        autofocus
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.wo_item_rate"
                                    />
                                </div>
                            </div>

                            <div class="flex items-center gap-2">
                                <PrimaryButton :disabled="form.processing">
                                    {{ edit_mode ? "Update" : "Save" }}
                                </PrimaryButton>

                                <Link
                                    :href="route('work-order.index')"
                                    class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                >
                                    Cancel
                                </Link>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
