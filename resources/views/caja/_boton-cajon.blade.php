{{-- Abre el cajón del dinero sin cobrar: imprime un punto diminuto (ver caja/abrir-cajon). --}}
<x-button variant="secondary" size="sm" icon="banknote" class="shrink-0 !py-2" title="Abrir el cajón del dinero"
          x-data="{
              abriendo: false,
              async abrir() {
                  this.abriendo = true;
                  await window.impresoraRecibos.abrirCajon({{ \Illuminate\Support\Js::from(route('caja.cajon')) }});
                  setTimeout(() => this.abriendo = false, 1500);
              },
          }"
          x-bind:disabled="abriendo" x-on:click="abrir()">
    <span class="hidden sm:inline">Abrir cajón</span>
</x-button>
