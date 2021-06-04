<tr class="user__record">
    <td class="user__field">{{$user->name}}</td>
    <td class="user__field">{{$user->email}}</td>
    <td class="user__field">{{$user->role}}></td>
    <th>
    <label>Datum</label>
        <input type="date" name="banned_until">
        <a class="create-form__btn" href="/admin/users"><button class="create-form__btn"type="submit">Blokkeren</button></a>
    </th>

 </tr>