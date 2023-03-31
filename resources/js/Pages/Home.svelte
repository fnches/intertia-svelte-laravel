<script>
    // @ts-ignore
    import Status from './Status.svelte'

    let user = "User";

</script>


<main>
    <div>

    <h1>Hello {user}!</h1>

    </div>



    <div>
      <a href="https://vitejs.dev" target="_blank">
        <img src="/vite.svg" class="logo" alt="Vite Logo" />
      </a>
      <a href="https://svelte.dev" target="_blank">
        <img class="logo svelte" alt="Svelte Logo" />
      </a>
      <a href="https://algorand.foundation" target="_blank">
        <img src="/algorand.svg" class="logo algorand" alt="Algorand Logo" />
      </a>
    </div>
    <h1>Vite + Svelte + Algorand</h1>

    <div class="card">
        <Status />
    </div>
  </main>

  <style>
    .logo {
      height: 6em;
      padding: 1.5em;
      will-change: filter;
    }
    .logo:hover {
      filter: drop-shadow(0 0 2em #646cffaa);
    }
    .logo.svelte:hover {
      filter: drop-shadow(0 0 2em #ff3e00aa);
    }
    .logo.algorand:hover {
      filter: drop-shadow(0 0 2em #ffffffaa);
    }
  </style>
