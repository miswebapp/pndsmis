<template>
    <v-container fluid>
        <v-row>
            <v-col  class="d-flex" cols="6">
                    <v-select
                        :items="items"
                        label="Categories"
                        >
                    </v-select>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    data () {
        
        return {
            items: ["Sosial","Teknikal","Finansas","Seluk"]
        }
    }
}
</script>