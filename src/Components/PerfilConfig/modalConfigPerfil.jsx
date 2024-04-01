import React, { useState } from 'react';
import { View, Image, Text, Modal, Pressable } from 'react-native';
import Perfil from '../../routes/pages/Usuario/Perfil'
import styles from '../Styles/ModalConfig/modalConfigStyle'
import { useNavigation } from '@react-navigation/native';

export default function modalConfigPerfil() {
  const navigation = useNavigation();

  const [modalConfigVisu, setModalConfigVisu] = useState(true);

  function configPerfilModal() {
    setModalConfigVisu(false);
    <Perfil configPerfilModal/>
  }

  return (
    <View style={styles.container}>
      <Modal 
        animationType='slide'
        visible={modalConfigVisu}
        onRequestClose={() => {
          configPerfilModal();
      }}>
        {/* Imagens dos cantos */}
      <View style={{ position: 'absolute', width: '100%', height: '100%'}}>
          <View style={{ justifyContent: 'flex-start' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start', marginTop: 270}}>
              <Image
                style={{ height: 105, width: 43 }}
                source={require('../../../assets/img/ConfigPerfil/esquerdo.png')}
              />
            </View>
            <View style={{ position: 'sticky', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 50, width: 46 }}
                source={require('../../../assets/img/ConfigPerfil/superiorDireito.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end', marginTop: 200 }}>
              <Image
                style={{ height: 110, width: 35 }}
                source={require('../../../assets/img/ConfigPerfil/meioDIreito.png')}
              />
            </View>
          </View>
          <View style={{ justifyContent: 'flex-end', height: '100%' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-end',  }}>
              <Image
                style={{ height: 140, width: 55, marginBottom: 50 }}
                source={require('../../../assets/img/ConfigPerfil/inferiorDireito.png')}
              />
            </View>
          </View>
      </View>
        <View style={styles.topContainer}>
          <Pressable onPress={configPerfilModal}>
            <Image
                style={styles.back}
                source={require('../../../assets/img/User/back.png')}
            />
          </Pressable>
        </View>
        <View style={styles.bottomContainer}>
          <Text style={styles.title}>Configurações</Text>
        </View>
        <View style={[styles.bottomContainer, styles.subTitleContainer]}>
          <Text style={styles.subTitle}>Conta</Text>
        </View>
        <View style={styles.contentContainer}>
          <View style={styles.column}>
            <Pressable style={styles.item}>
              <View style={styles.buttonContent}>
                <Image
                  style={styles.icon}
                  source={require('../../../assets/img/User/iconDadosPessoais.png')}
                />
                <Text style={styles.itemText}>Dados pessoais</Text>
              </View>
              <Image
                style={styles.iconSeta}
                source={require('../../../assets/img/User/seta.png')}
              />
            </Pressable>
            <Pressable style={styles.item}>
              <View style={styles.buttonContent}>
                <Image
                  style={styles.icon}
                  source={require('../../../assets/img/User/iconSeguindo.png')}
                />
                <Text style={styles.itemText}>Seguindo</Text>
              </View>
              <Image
                style={styles.iconSeta}
                source={require('../../../assets/img/User/seta.png')}
              />
            </Pressable>
            <Pressable style={styles.item}>
              <View style={styles.buttonContent}>
                <Image
                  style={styles.icon}
                  source={require('../../../assets/img/User/iconNotificacoes.png')}
                />
                <Text style={styles.itemText}>Notificações</Text>
              </View>
              <Image
                style={styles.iconSeta}
                source={require('../../../assets/img/User/seta.png')}
              />
            </Pressable>
            <Pressable style={styles.item}>
              <View style={styles.buttonContent}>
                <Image
                  style={styles.icon}
                  source={require('../../../assets/img/User/iconRegistroInteresse.png')}
                />
                <Text style={styles.itemText}>Registro de Interesse</Text>
              </View>
              <Image
                style={styles.iconSeta}
                source={require('../../../assets/img/User/seta.png')}
              />
            </Pressable>
          </View>
        </View>
        <View style={[styles.bottomContainer, styles.subTitleContainer]}>
          <Text style={styles.subTitle}>Suporte</Text>
          <View style={styles.contentContainer}>
            <View style={styles.column}>
              <Pressable style={styles.item} onPress={() => {configPerfilModal(); navigation.navigate('Feedback')}}>
                <View style={styles.buttonContent}>
                  <Image
                    style={styles.icon}
                    source={require('../../../assets/img/User/iconFeedback.png')}
                  />
                  <Text style={styles.itemText}>Feedback</Text>
                </View>
                <Image
                  style={styles.iconSeta}
                  source={require('../../../assets/img/User/seta.png')}
                />
              </Pressable>
              <Pressable style={styles.item} onPress={() => {configPerfilModal(); navigation.navigate('Contato')}}>
                <View style={styles.buttonContent}>
                  <Image
                    style={styles.icon}
                    source={require('../../../assets/img/User/iconContato.png')}
                  />
                  <Text style={styles.itemText}>Contato</Text>
                </View>
                <Image
                  style={styles.iconSeta}
                  source={require('../../../assets/img/User/seta.png')}
                />
              </Pressable>
              <Pressable style={styles.item} onPress={() => {configPerfilModal(); navigation.navigate('Sobre')}}>
                <View style={styles.buttonContent}>
                  <Image
                    style={styles.icon}
                    source={require('../../../assets/img/User/iconSobre.png')}
                  />
                  <Text style={styles.itemText}>Sobre</Text>
                </View>
                <Image
                  style={styles.iconSeta}
                  source={require('../../../assets/img/User/seta.png')}
                />
              </Pressable>
            </View>
          </View>
        </View>
      </Modal>
    </View>
  );
}
