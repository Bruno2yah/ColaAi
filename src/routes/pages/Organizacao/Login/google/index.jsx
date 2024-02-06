const HomeScreen = ({ navigation }) => {
    return (
      <View style={styles.container}>
        <TouchableOpacity
          style={styles.buttonOrganizacao}
          onPress={() => navigation.navigate('Organizacao')}
        >
          <Text style={styles.buttonTextOrganizacao}>Organizacao</Text>
        </TouchableOpacity>
        <TouchableOpacity
          style={styles.buttonUsuario}
          onPress={() => navigation.navigate('Usuario')}
        >
          <Text style={styles.buttonTextUsuario}>Usuario</Text>
        </TouchableOpacity>
      </View>
    );
  };