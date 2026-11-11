<input type="text" name="nom" placeholder="Name" class="form-control" value="{{ old('nom', $student->nom ?? '') }}" required>
<input type="text" name="prenom" placeholder="First Name" class="form-control" value="{{ old('prenom', $student->prenom ?? '') }}" required>
<input type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email', $student->email ?? '') }}" required>
<input type="date" name="date_naissance" placeholder="Date of Birth" class ="form-control" value="{{ old('date_naissance', $student->date_naissance ?? '') }}" required>
<button type="submit" class="btn btn-primary mt-3">Validate</button>
<button type="reset" class="btn btn-secondary mt-3">Reset</button>