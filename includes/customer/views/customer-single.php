<div class="wrap">
    <h1><?php _e( 'Customer Details', 'ac' ); ?></h1>
    <?php $item = $this->customer_obj->get_customer( $id ); ?>
        <table class="form-table">
            <tbody>
                <tr class="row-name">
                    <th scope="row">
                        <label for="name"><?php _e( 'Name', 'ac' ); ?></label>
                    </th>
                    <td>
                        <?php echo esc_attr( $item->name ); ?>
                    </td>
                </tr>
                <tr class="row-address">
                    <th scope="row">
                        <label for="address"><?php _e( 'Address', 'ac' ); ?></label>
                    </th>
                    <td>
                        <?php echo esc_textarea( $item->address ); ?>
                    </td>
                </tr>
                <tr class="row-city">
                    <th scope="row">
                        <label for="city"><?php _e( 'City', 'ac' ); ?></label>
                    </th>
                    <td>
                        <?php echo esc_attr( $item->city ); ?>
                    </td>
                </tr>
                <tr class="row-date">
                    <th scope="row">
                        <label for="date"><?php _e( 'Date Created', 'ac' ); ?></label>
                    </th>
                    <td>
                        <?php echo esc_attr( $item->date ); ?>
                    </td>
                </tr>
             </tbody>
        </table>
</div>
