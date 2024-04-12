import React from 'react';
import {
  View,
  Text,
  Pressable,
  StyleSheet,
  ImageBackground,
  Image,
} from 'react-native';
import * as Animado from 'react-native-animatable';

const ColaAi = ({ navigation }) => {
  return (
    <View style={styles.container}>
      <ImageBackground
        source={require('../../../../../ColaAi/assets/img/cadastro/superiorEsquerdo.png')}
        style={styles.superiorEsquerdo}
      />
      <ImageBackground
        source={require('../../../../../ColaAi/assets/img/cadastro/superiorDireito.png')}
        style={styles.superiorDireito}
      />
      <ImageBackground
        source={require('../../../../../ColaAi/assets/img/cadastro/inferiorEsquerdo.png')}
        style={styles.inferiorEsquerdo}
      />
      <ImageBackground
        source={require('../../../../../ColaAi/assets/img/cadastro/inferiorDireito.png')}
        style={styles.inferiorDireito}
      />
      <Image
        style={{ bottom: 110, height: 90, width: 230 }}
        source={require('../../../../assets/img/cadastro/acessar.png')}
      />

      <Animado.View animation="fadeInRight" delay={500}>
        <View style={styles.buttonContainer}>
          <Pressable
            style={styles.buttonOrganizacao}
            onPress={() => navigation.navigate('Organizacao')}
          >
            <Text style={styles.buttonTextOrganizacao}>Organização</Text>
          </Pressable>
        </View>
      </Animado.View>

      <Animado.View animation="fadeInRight" delay={1000}>
        <View style={styles.buttonContainer}>
          <Pressable
            style={styles.buttonUsuario}
            onPress={() => navigation.navigate('Usuario')}
          >
            <Text style={styles.buttonTextUsuario}>Usuario</Text>
          </Pressable>
        </View>
      </Animado.View>

      <View style={styles.linkContainer}>
        <Pressable onPress={() => navigation.navigate('AcessoSemLogin')}>
          <Text style={styles.linkText}>Acesso sem login</Text>
        </Pressable>
      </View>
    </View>
  );
};

// Estilos
const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: 'white',
  },
  buttonContainer: {
    marginTop: 20,
  },
  linkContainer: {
    marginTop: 10,
  },
  buttonTextUsuario: {
    fontSize: 28,
    color: '#6D9EAF',
    textAlign: 'center',
  },
  buttonTextOrganizacao: {
    fontSize: 26,
    color: '#FABDC1',
    textAlign: 'center',
  },
  buttonOrganizacao: {
    backgroundColor: '#6D9EAF',
    padding: 10,
    margin: 10,
    borderRadius: 15,
    width: 200,
    height: 60,
  },
  buttonUsuario: {
    backgroundColor: '#FABDC1',
    padding: 10,
    margin: 10,
    borderRadius: 15,
    width: 200,
    height: 60,
  },
  linkText: {
    fontSize: 16,
    color: 'blue',
    marginTop: 10,
  },
  superiorEsquerdo: {
    position: 'absolute',
    resizeMode: 'contain',
    top: 0,
    left: 0,
    width: 200,
    height: 200,
  },
  superiorDireito: {
    position: 'absolute',
    resizeMode: 'contain',
    top: 0,
    right: -20, // Corrigido (mudado de left para right)
    width: 290,
    height: 290,
  },
  inferiorEsquerdo: {
    position: 'absolute',
    resizeMode: 'contain',
    bottom: 0,
    left: 0,
    width: 200, // Corrigido
    height: 200,
  },
  inferiorDireito: {
    position: 'absolute',
    resizeMode: 'contain',
    bottom: 0,
    right: 0, // Corrigido (mudado de left para right)
    width: 200,
    height: 200,
  },
});

export default ColaAi;
