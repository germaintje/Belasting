<?php
//create formulier
?>
            <form action="index.php" method="POST">
                <div class="form-group">
                    <label for="inkomsten">inkomsten</label>
                    <input type="text" name="inkomsten" class="form-control" placeholder="inkomsten">
                </div>
                <div class="form-group">
                    <label for="achternaam">tariefgroep</label>
                    <select multiple class="form-control" name="tariefgroep">
                        <option value="419">tariefgroep 1</option>
                        <option value="8799">tariefgroep 2</option>
                        <option value="17179">tariefgroep 3</option>
                        <option value="15503">tariefgroep 4</option>
                        <option value="15503">tariefgroep 5</option>
                        <option value="0">Overig</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary" value="Bereken de vakantiedagen">Bereken de vakantiedagen</button>
            </form>

