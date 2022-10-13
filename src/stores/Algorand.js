import { readable } from 'svelte/store'
import algosdk from 'algosdk'

const token = ''
const server = 'https://mainnet-api.algonode.cloud'
const port = 443

export const algod = new readable(new algosdk.Algodv2(token, server, port))
