import React, { useState } from 'react';
import { ScrollView, StatusBar, StyleSheet, Text, View, ImageBackground, Image, Pressable } from 'react-native';
import { useNavigation } from '@react-navigation/native';

export default function Perfil() {
  const navigation = useNavigation();
  const [isDrawerOpen, setIsDrawerOpen] = useState(false);

  const toggleDrawer = () => {
    setIsDrawerOpen(!isDrawerOpen);
  };

  return (
    <ScrollView style={styles.container}>
      <StatusBar style="auto" />
      {/* Botão do menu hamburguer */}
      <Pressable style={styles.menuButton} onPress={toggleDrawer}>
        <Image
          style={{ width: 30, height: 30 }}
          source={require('../../../../../assets/img/User/menu.png')}
        />
      </Pressable>
      <View style={styles.capaPerfilBox}>
      <ImageBackground source={require('../../../../../assets/img/User/user.png')} resizeMode="cover" style={styles.imageCapa}>
      </ImageBackground>

      </View>
      <View style={styles.perfilUser}>
        <Image
          style={styles.fotoUser}
          source={require('../../../../../assets/img/User/profile-user.png')}
        />
      </View>
      <View style={styles.nomePerfil}>
        <Text style={styles.textUser}>Usuário</Text>
      </View>
      <View style={styles.botaoPerfil}></View>

      {/* Renderizar o menu hamburguer somente se estiver aberto */}
      {isDrawerOpen && (
        <View style={styles.drawerContainer}>
          {/* Conteúdo do menu hamburguer aqui */}
          <View><Text>Conta</Text></View>
          <View style={styles.dadoPessoal}>
            <View>
              <Image
                style={{ width: 20, height: 20 }}
                source={require('../../../../../assets/img/User/profile-user.png')}
              />
            </View>
            <View>
              <Text>Dados Pessoais</Text></View>

          </View>
        </View>
      )}
    </ScrollView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
  },
  capaPerfilBox: {
    flex: 1,
    backgroundColor: 'red',
  },
  imageCapa: {
    justifyContent: 'center',
    height: 170,
  },
  fotoUser: {
    width: 130,
    height: 130,
    marginStart: 10,
    borderRadius: 100,
  },
  perfilUser: {
    flex: 1,
    width: '100%',
    justifyContent: 'flex-start',
    alignItems: 'flex-start',
  },
  nomePerfil: {
    justifyContent: 'center',
    alignItems: 'flex-start',
    marginStart: 50,
  },
  textUser: {},
  menuButton: {
    position: 'absolute',
    top: 10,
    right: 10,
    zIndex: 1,
  },
  drawerContainer: {
    position: 'absolute',
    top: 50, // Ajuste conforme necessário
    right: 10, // Ajuste conforme necessário
    backgroundColor: '#fff',
    elevation: 5, // Adicione sombra se desejar
    padding: 10,
    borderRadius: 5,
  },
  dadoPessoal: {
    flexDirection: 'row',
    justifyContent: 'space-evenly',
    alignItems: 'center',
    width:'100%'
  }
});
