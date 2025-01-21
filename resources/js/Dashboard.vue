<template>
  <div class="py-20">
    <h1 class="text-4xl mb-24">Teilnehmer</h1>
    <div>
      <table class="min-w-[1000px] w-full">
        <thead class="border-b-2 border-b-gray-100 font-thesans-bold">
          <tr>
            <th class="px-2 py-8 text-left text-sm font-medium">Name</th>
            <th class="px-2 py-8 text-left text-sm font-medium">Ort</th>
            <th class="px-2 py-8 text-left text-sm font-medium">E-Mail</th>
            <th class="px-2 py-8 text-left text-sm font-medium">Sofortpreis</th>
            <th class="px-2 py-8 text-left text-sm font-medium">Bestätigt am</th>
            <th class="px-2 py-8 text-sm font-medium text-right pr-10">Status</th>
            <!-- <th></th> -->
          </tr>
        </thead>
        <tbody class="bg-white divide-y-2 divide-gray-100">
          <tr 
            class="text-md leading-none"
            v-for="participant in participants" :key="participant.id">
            <td class="px-2 py-8 whitespace-nowrap align-middle">
              {{ participant.name }}
            </td>
            <td class="px-2 py-8 whitespace-nowrap align-middle">
              {{ participant.city }}
            </td>
            <td class="px-2 py-8 whitespace-nowrap align-middle">
              {{ participant.email }}
            </td>
            <td class="px-2 py-8 whitespace-nowrap align-middle">
              {{ participant.selection }}
            </td>
            <td class="px-2 py-8 whitespace-nowrap align-middle">
              {{ formatDate(participant.email_verified_at) }}
            </td>
            <td class="px-2 py-8 whitespace-nowrap align-middle text-right">
              <a 
                href="javascript:;"
                @click="openEditDialog(participant)"
                class="px-12 py-6 inline-flex text-sm tracking-wider uppercase leading-none rounded-full"
                  :class="{
                    'bg-gray-500 text-white': participant.state.name === 'Offen',
                    'bg-yellow-500 text-white': participant.state.name === 'In Bearbeitung',
                    'bg-green-500 text-white': participant.state.name === 'Abgeschlossen'
                  }">
                {{ participant.state.name }}
                </a>
            </td>
            <!-- <td class="px-2 py-8 whitespace-nowrap text-sm text-right">
              <button @click="deleteParticipant(participant.id)"  class="text-red-600 hover:text-red-900">
                Löschen
              </button>
            </td> -->
          </tr>
        </tbody>
      </table>
    </div>

    <div 
      v-if="showEditDialog" 
      class="fixed inset-0 bg-black/50 flex items-center justify-center">
      <div class="bg-white rounded-md p-30 max-w-md w-full">
        <h2 class="text-xl font-thesans-bold mb-15">Status</h2>
        <select 
          v-model="selectedState" 
          class="bg-white text-lg py-12 w-full !ring-0 focus:ring-0 !border-fern/50 accent-fern appearance-none border-2 mb-30">
          <option value="1">Offen</option>
          <option value="2">In Bearbeitung</option>
          <option value="3">Abgeschlossen</option>
        </select>
        <div class="flex justify-between space-x-20">
          <button @click="closeEditDialog" class="text-lg">
            Abbrechen
          </button>
          <button @click="updateParticipantState" class="bg-fern hover:bg-fern-sat text-white font-thesans-bold rounded-full text-2xl py-10 lg:px-30 transition-all">
            Speichern
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'

const participants = ref([])
const showEditDialog = ref(false)
const selectedState = ref('1')
const selectedParticipant = ref(null)

// Fetch all participants
const fetchParticipants = async () => {
  try {
    const response = await axios.get('/api/participants')
    participants.value = response.data
  } catch (error) {
    console.error('Error fetching participants:', error)
  }
}

// Open edit dialog
const openEditDialog = (participant) => {
  selectedParticipant.value = participant
  selectedState.value = participant.state
  showEditDialog.value = true
}

// Close edit dialog
const closeEditDialog = () => {
  showEditDialog.value = false
  selectedParticipant.value = null
  selectedState.value = ''
}

// Update participant state
const updateParticipantState = async () => {
  try {
    await axios.put(`/api/participant/${selectedParticipant.value.id}`, {
      state: selectedState.value
    })
    
    // Update local state
    const index = participants.value.findIndex(p => p.id === selectedParticipant.value.id)
    if (index !== -1) {
      if (selectedState.value === '1') {
        participants.value[index].state.name = 'Offen'
      }
      if (selectedState.value === '2') {
        participants.value[index].state.name = 'In Bearbeitung'
      }
      if (selectedState.value === '3') {
        participants.value[index].state.name = 'Abgeschlossen'
      }
    }
    closeEditDialog()
  } catch (error) {
    console.error('Error updating participant:', error)
  }
}

// Delete participant
const deleteParticipant = async (id) => {
  if (!confirm('Are you sure you want to delete this participant?')) return
  
  try {
    await axios.delete(`/api/participants/${id}`)
    participants.value = participants.value.filter(p => p.id !== id)
  } catch (error) {
    console.error('Error deleting participant:', error)
  }
}

// Date formatting function
const formatDate = (dateStr) => {
  if (!dateStr) return '-'
  const date = new Date(dateStr)
  return date.toLocaleDateString('de-DE', {
    day: '2-digit',
    month: '2-digit',
    year: 'numeric'
  })
}

// Fetch participants on component mount
onMounted(() => {
  fetchParticipants()
});
</script>