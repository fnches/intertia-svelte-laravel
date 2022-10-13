<script>
	import { algod } from '../stores/Algorand.js'
	import { onMount, onDestroy } from 'svelte'

	let running
	let last_round

	async function getStatus() {
		const status = await $algod.status().do()
		last_round = status['last-round']
	}

	async function trackRounds() {
		if (!running) return
		const status = await $algod.statusAfterBlock(last_round).do()
		last_round = status['last-round']
		trackRounds()
	}

	onMount(async () => {
		await getStatus()
		running = true
		trackRounds()
	})

	onDestroy(async () => {
		running = false
	})
</script>

<h2>Last Round: {last_round}</h2>
