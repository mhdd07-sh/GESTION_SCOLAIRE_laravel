{{-- Nom --}}
<div class="mb-3">
    <label class="form-label">Nom :</label>

    <input type="text"
           name="nom"
           class="form-control"
           value="{{ old('nom', $professor->nom ?? '') }}"
           required>

    @error('nom')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


{{-- Prénom --}}
<div class="mb-3">
    <label class="form-label">Prénom :</label>

    <input type="text"
           name="prenom"
           class="form-control"
           value="{{ old('prenom', $professor->prenom ?? '') }}"
           required>

    @error('prenom')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


{{-- Email --}}
<div class="mb-3">
    <label class="form-label">Adresse email :</label>

    <input type="email"
           name="email"
           class="form-control"
           placeholder="exemple@gmail.com"
           value="{{ old('email', $professor->email ?? '') }}"
           required>

    @error('email')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


{{-- Date de naissance --}}
<div class="mb-3">
    <label class="form-label">Date de naissance :</label>

    <input type="date"
           name="date_naissance"
           class="form-control"
           value="{{ old('date_naissance', $professor->date_naissance ?? '') }}"
           required>

    @error('date_naissance')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


{{-- Profession --}}
<div class="mb-3">
    <label class="form-label">Profession :</label>

    <input type="text"
           name="profession"
           class="form-control"
           placeholder="Exemple : Enseignant en informatique"
           value="{{ old('profession', $professor->profession ?? '') }}"
           required>

    @error('profession')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


<button type="submit" class="btn btn-primary mt-3">
    Enregistrer
</button>

<a href="{{ route('professors.index') }}"
   class="btn btn-secondary mt-3">
    Annuler
</a>