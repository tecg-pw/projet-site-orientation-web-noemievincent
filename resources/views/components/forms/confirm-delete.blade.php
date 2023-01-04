@props([
    'action', 'url'
])
<div class="fixed z-50 w-full h-full bg-blue-dark/30 flex justify-center items-center">
    <div class="bg-white rounded-2xl border border-blue/20 p-6 flex flex-col gap-2">
        <p class="text-xl font-semibold text-blue-dark">Confirmer la suppression</p>
        <form action="{{$action}}/delete" method="post"
              class="flex flex-col gap-7">
            @csrf
            <label for="confirm-delete">Souhaitez-vous supprimer votre question ?</label>
            <div class="flex justify-between items-center">
                <a href="{{$url}}"
                   class="text-orange hover:text-orange-dark transitionable">Annuler</a>
                <input name="confirm-delete" id="confirm-delete" value="Supprimer" type="submit"
                       class="bg-red-600 hover:bg-red-700 py-2 px-3 text-white rounded-lg transitionable"/>
            </div>
        </form>
    </div>
</div>
